<?php

namespace Sunaoka\Aws\Structures\OAM\CreateLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Label
 * @property string|null $LabelTemplate
 * @property Shapes\LinkConfiguration|null $LinkConfiguration
 * @property list<string>|null $ResourceTypes
 * @property string|null $SinkArn
 * @property array<string, string>|null $Tags
 */
class CreateLinkResponse extends Response
{
}
