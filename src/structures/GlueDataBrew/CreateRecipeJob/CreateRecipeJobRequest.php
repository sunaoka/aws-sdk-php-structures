<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DatasetName
 * @property string|null $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3'|null $EncryptionMode
 * @property string $Name
 * @property 'ENABLE'|'DISABLE'|null $LogSubscription
 * @property int|null $MaxCapacity
 * @property int<0, max>|null $MaxRetries
 * @property list<Shapes\Output>|null $Outputs
 * @property list<Shapes\DataCatalogOutput>|null $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput>|null $DatabaseOutputs
 * @property string|null $ProjectName
 * @property Shapes\RecipeReference|null $RecipeReference
 * @property string $RoleArn
 * @property array<string, string>|null $Tags
 * @property int<0, max>|null $Timeout
 */
class CreateRecipeJobRequest extends Request
{
    /**
     * @param array{
     *     DatasetName?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3'|null,
     *     Name: string,
     *     LogSubscription?: 'ENABLE'|'DISABLE'|null,
     *     MaxCapacity?: int|null,
     *     MaxRetries?: int<0, max>|null,
     *     Outputs?: list<Shapes\Output>|null,
     *     DataCatalogOutputs?: list<Shapes\DataCatalogOutput>|null,
     *     DatabaseOutputs?: list<Shapes\DatabaseOutput>|null,
     *     ProjectName?: string|null,
     *     RecipeReference?: Shapes\RecipeReference|null,
     *     RoleArn: string,
     *     Tags?: array<string, string>|null,
     *     Timeout?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
