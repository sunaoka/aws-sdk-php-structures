<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRecipeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3'|null $EncryptionMode
 * @property string $Name
 * @property 'ENABLE'|'DISABLE'|null $LogSubscription
 * @property int|null $MaxCapacity
 * @property int<0, max>|null $MaxRetries
 * @property list<Shapes\Output>|null $Outputs
 * @property list<Shapes\DataCatalogOutput>|null $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput>|null $DatabaseOutputs
 * @property string $RoleArn
 * @property int<0, max>|null $Timeout
 */
class UpdateRecipeJobRequest extends Request
{
    /**
     * @param array{
     *     EncryptionKeyArn?: string|null,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3'|null,
     *     Name: string,
     *     LogSubscription?: 'ENABLE'|'DISABLE'|null,
     *     MaxCapacity?: int|null,
     *     MaxRetries?: int<0, max>|null,
     *     Outputs?: list<Shapes\Output>|null,
     *     DataCatalogOutputs?: list<Shapes\DataCatalogOutput>|null,
     *     DatabaseOutputs?: list<Shapes\DatabaseOutput>|null,
     *     RoleArn: string,
     *     Timeout?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
