<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateResourceSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceSetArn
 * @property string $ResourceSetName
 * @property string $ResourceSetType
 * @property list<Shapes\Resource> $Resources
 * @property array<string, string> $Tags
 */
class UpdateResourceSetResponse extends Response
{
}
