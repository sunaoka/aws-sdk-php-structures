<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string $IntegrationArn
 * @property string $KMSKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention' $Status
 * @property list<Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<IntegrationError> $Errors
 * @property string $DataFilter
 * @property string $Description
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string,
     *     TargetArn?: string,
     *     IntegrationName?: string,
     *     IntegrationArn?: string,
     *     KMSKeyId?: string,
     *     AdditionalEncryptionContext?: array<string, string>,
     *     Status?: 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention',
     *     Tags?: list<Tag>,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     Errors?: list<IntegrationError>,
     *     DataFilter?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
