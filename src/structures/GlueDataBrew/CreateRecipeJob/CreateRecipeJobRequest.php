<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property string $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3' $EncryptionMode
 * @property string $Name
 * @property 'ENABLE'|'DISABLE' $LogSubscription
 * @property int $MaxCapacity
 * @property int $MaxRetries
 * @property list<Shapes\Output> $Outputs
 * @property list<Shapes\DataCatalogOutput> $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput> $DatabaseOutputs
 * @property string $ProjectName
 * @property Shapes\RecipeReference $RecipeReference
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property int $Timeout
 */
class CreateRecipeJobRequest extends Request
{
    /**
     * @param array{
     *     DatasetName?: string,
     *     EncryptionKeyArn?: string,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3',
     *     Name: string,
     *     LogSubscription?: 'ENABLE'|'DISABLE',
     *     MaxCapacity?: int,
     *     MaxRetries?: int,
     *     Outputs?: list<Shapes\Output>,
     *     DataCatalogOutputs?: list<Shapes\DataCatalogOutput>,
     *     DatabaseOutputs?: list<Shapes\DatabaseOutput>,
     *     ProjectName?: string,
     *     RecipeReference?: Shapes\RecipeReference,
     *     RoleArn: string,
     *     Tags?: array<string, string>,
     *     Timeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
