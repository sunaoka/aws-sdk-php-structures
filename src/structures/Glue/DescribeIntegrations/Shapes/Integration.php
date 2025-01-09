<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $Description
 * @property string $IntegrationName
 * @property string $IntegrationArn
 * @property string $KmsKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property list<Tag> $Tags
 * @property 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION' $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<IntegrationError> $Errors
 * @property string $DataFilter
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     TargetArn: string,
     *     Description?: string,
     *     IntegrationName: string,
     *     IntegrationArn: string,
     *     KmsKeyId?: string,
     *     AdditionalEncryptionContext?: array<string, string>,
     *     Tags?: list<Tag>,
     *     Status: 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION',
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     Errors?: list<IntegrationError>,
     *     DataFilter?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
