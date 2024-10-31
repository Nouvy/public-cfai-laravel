<?php
/**
 * @OA\Info(title="Api Concessionnaire", version="0.1")
 * @OAS\SecurityScheme(
 *       securityScheme="bearer_token",
 *       type="http",
 *       scheme="bearer"
 *  )
 */


/**
 * @OA\Get(
 *     path="/vehicules",
 *     summary="Récupère la liste des véhicules",
 *     description="Renvoie une liste de tous les véhicules disponibles dans la base de données",
 *     tags={"Véhicules"},
 *     @OA\Response(
 *         response=200,
 *         description="Liste des véhicules",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="vehicules",
 *                 type="array",
 *                 @OA\Items(
 *                     type="object",
 *                     @OA\Property(property="immat", type="string", example="AB-123-CD"),
 *                     @OA\Property(property="annee", type="integer", example=2020),
 *                     @OA\Property(property="kilometrage", type="integer", example=12000),
 *                     @OA\Property(property="prixttc", type="number", format="float", example=15000.50),
 *                     @OA\Property(property="modele_id", type="integer", example=1)
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Erreur interne du serveur"
 *     )
 * )
 */
>
