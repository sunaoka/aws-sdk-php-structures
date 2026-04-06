<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePartnerApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property Shapes\PartnerAppMaintenanceConfig|null $MaintenanceConfig
 * @property string|null $Tier
 * @property Shapes\PartnerAppConfig|null $ApplicationConfig
 * @property bool|null $EnableIamSessionBasedIdentity
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class UpdatePartnerAppRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     MaintenanceConfig?: Shapes\PartnerAppMaintenanceConfig|null,
     *     Tier?: string|null,
     *     ApplicationConfig?: Shapes\PartnerAppConfig|null,
     *     EnableIamSessionBasedIdentity?: bool|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
