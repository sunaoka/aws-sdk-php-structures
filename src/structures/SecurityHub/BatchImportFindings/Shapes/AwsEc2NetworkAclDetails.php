<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsDefault
 * @property string|null $NetworkAclId
 * @property string|null $OwnerId
 * @property string|null $VpcId
 * @property list<AwsEc2NetworkAclAssociation>|null $Associations
 * @property list<AwsEc2NetworkAclEntry>|null $Entries
 */
class AwsEc2NetworkAclDetails extends Shape
{
    /**
     * @param array{
     *     IsDefault?: bool|null,
     *     NetworkAclId?: string|null,
     *     OwnerId?: string|null,
     *     VpcId?: string|null,
     *     Associations?: list<AwsEc2NetworkAclAssociation>|null,
     *     Entries?: list<AwsEc2NetworkAclEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
