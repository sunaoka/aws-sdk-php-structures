<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property MemberFrameworkAttributes|null $FrameworkAttributes
 * @property MemberLogPublishingConfiguration|null $LogPublishingConfiguration
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 * @property string|null $KmsKeyArn
 */
class Member extends Shape
{
    /**
     * @param array{
     *     NetworkId?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     FrameworkAttributes?: MemberFrameworkAttributes|null,
     *     LogPublishingConfiguration?: MemberLogPublishingConfiguration|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null,
     *     Arn?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
