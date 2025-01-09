<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IntegrationArn
 * @property string $IntegrationName
 * @property string $SourceArn
 * @property string $TargetArn
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention' $Status
 * @property list<IntegrationError> $Errors
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Description
 * @property string $KMSKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property list<Tag> $Tags
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     IntegrationArn?: string,
     *     IntegrationName?: string,
     *     SourceArn?: string,
     *     TargetArn?: string,
     *     Status?: 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention',
     *     Errors?: list<IntegrationError>,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     KMSKeyId?: string,
     *     AdditionalEncryptionContext?: array<string, string>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
