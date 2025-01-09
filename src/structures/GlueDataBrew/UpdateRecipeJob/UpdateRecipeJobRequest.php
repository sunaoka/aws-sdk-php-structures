<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRecipeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3' $EncryptionMode
 * @property string $Name
 * @property 'ENABLE'|'DISABLE' $LogSubscription
 * @property int $MaxCapacity
 * @property int $MaxRetries
 * @property list<Shapes\Output> $Outputs
 * @property list<Shapes\DataCatalogOutput> $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput> $DatabaseOutputs
 * @property string $RoleArn
 * @property int $Timeout
 */
class UpdateRecipeJobRequest extends Request
{
    /**
     * @param array{
     *     EncryptionKeyArn?: string,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3',
     *     Name: string,
     *     LogSubscription?: 'ENABLE'|'DISABLE',
     *     MaxCapacity?: int,
     *     MaxRetries?: int,
     *     Outputs?: list<Shapes\Output>,
     *     DataCatalogOutputs?: list<Shapes\DataCatalogOutput>,
     *     DatabaseOutputs?: list<Shapes\DatabaseOutput>,
     *     RoleArn: string,
     *     Timeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
