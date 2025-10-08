<?php

namespace Sunaoka\Aws\Structures\DirectoryService\StartADAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CustomerDnsIps
 * @property string $DnsName
 * @property DirectoryVpcSettings $VpcSettings
 * @property list<string> $InstanceIds
 * @property list<string>|null $SecurityGroupIds
 */
class AssessmentConfiguration extends Shape
{
    /**
     * @param array{
     *     CustomerDnsIps: list<string>,
     *     DnsName: string,
     *     VpcSettings: DirectoryVpcSettings,
     *     InstanceIds: list<string>,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
