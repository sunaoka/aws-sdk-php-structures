<?php

namespace Sunaoka\Aws\Structures\MediaConnect\TakeRouterInput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ROUTED'|'ROUTING'|'UNROUTED' $RoutedState
 * @property string $RouterOutputArn
 * @property string $RouterOutputName
 * @property string|null $RouterInputArn
 * @property string|null $RouterInputName
 */
class TakeRouterInputResponse extends Response
{
}
