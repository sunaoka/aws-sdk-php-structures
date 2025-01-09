<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePartnerApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property Shapes\PartnerAppMaintenanceConfig $MaintenanceConfig
 * @property string $Tier
 * @property Shapes\PartnerAppConfig $ApplicationConfig
 * @property bool $EnableIamSessionBasedIdentity
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class UpdatePartnerAppRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaintenanceConfig?: Shapes\PartnerAppMaintenanceConfig,
     *     Tier?: string,
     *     ApplicationConfig?: Shapes\PartnerAppConfig,
     *     EnableIamSessionBasedIdentity?: bool,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
