<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsDefault
 * @property string $NetworkAclId
 * @property string $OwnerId
 * @property string $VpcId
 * @property list<AwsEc2NetworkAclAssociation> $Associations
 * @property list<AwsEc2NetworkAclEntry> $Entries
 */
class AwsEc2NetworkAclDetails extends Shape
{
    /**
     * @param array{
     *     IsDefault?: bool,
     *     NetworkAclId?: string,
     *     OwnerId?: string,
     *     VpcId?: string,
     *     Associations?: list<AwsEc2NetworkAclAssociation>,
     *     Entries?: list<AwsEc2NetworkAclEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
