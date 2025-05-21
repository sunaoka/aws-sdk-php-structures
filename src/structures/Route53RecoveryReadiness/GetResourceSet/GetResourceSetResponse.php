<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetResourceSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceSetArn
 * @property string|null $ResourceSetName
 * @property string|null $ResourceSetType
 * @property list<Shapes\ResourceShape>|null $Resources
 * @property array<string, string>|null $Tags
 */
class GetResourceSetResponse extends Response
{
}
