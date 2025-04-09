<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\GetControl;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property 'PREVENTIVE'|'PROACTIVE'|'DETECTIVE' $Behavior
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $Severity
 * @property Shapes\RegionConfiguration $RegionConfiguration
 * @property Shapes\ImplementationDetails|null $Implementation
 * @property list<Shapes\ControlParameter>|null $Parameters
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 */
class GetControlResponse extends Response
{
}
