<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $LaunchTemplateName
 * @property string $VersionDescription
 * @property Shapes\RequestLaunchTemplateData $LaunchTemplateData
 * @property Shapes\OperatorRequest $Operator
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateLaunchTemplateRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     LaunchTemplateName: string,
     *     VersionDescription?: string,
     *     LaunchTemplateData: Shapes\RequestLaunchTemplateData,
     *     Operator?: Shapes\OperatorRequest,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
