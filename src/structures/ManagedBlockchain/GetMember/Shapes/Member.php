<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property MemberFrameworkAttributes $FrameworkAttributes
 * @property MemberLogPublishingConfiguration $LogPublishingConfiguration
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property array<string, string> $Tags
 * @property string $Arn
 * @property string $KmsKeyArn
 */
class Member extends Shape
{
    /**
     * @param array{
     *     NetworkId?: string,
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     FrameworkAttributes?: MemberFrameworkAttributes,
     *     LogPublishingConfiguration?: MemberLogPublishingConfiguration,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>,
     *     Arn?: string,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
