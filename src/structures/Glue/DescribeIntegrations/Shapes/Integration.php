<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string|null $Description
 * @property string $IntegrationName
 * @property string $IntegrationArn
 * @property string|null $KmsKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property list<Tag>|null $Tags
 * @property 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION' $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property IntegrationConfig|null $IntegrationConfig
 * @property list<IntegrationError>|null $Errors
 * @property string|null $DataFilter
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     TargetArn: string,
     *     Description?: string|null,
     *     IntegrationName: string,
     *     IntegrationArn: string,
     *     KmsKeyId?: string|null,
     *     AdditionalEncryptionContext?: array<string, string>|null,
     *     Tags?: list<Tag>|null,
     *     Status: 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION',
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     IntegrationConfig?: IntegrationConfig|null,
     *     Errors?: list<IntegrationError>|null,
     *     DataFilter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
