<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string $LaunchTemplateName
 * @property string|null $VersionDescription
 * @property Shapes\RequestLaunchTemplateData $LaunchTemplateData
 * @property Shapes\OperatorRequest|null $Operator
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateLaunchTemplateRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     LaunchTemplateName: string,
     *     VersionDescription?: string|null,
     *     LaunchTemplateData: Shapes\RequestLaunchTemplateData,
     *     Operator?: Shapes\OperatorRequest|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
