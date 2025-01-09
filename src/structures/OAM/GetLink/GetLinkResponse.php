<?php

namespace Sunaoka\Aws\Structures\OAM\GetLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Label
 * @property string $LabelTemplate
 * @property Shapes\LinkConfiguration $LinkConfiguration
 * @property list<string> $ResourceTypes
 * @property string $SinkArn
 * @property array<string, string> $Tags
 */
class GetLinkResponse extends Response
{
}
