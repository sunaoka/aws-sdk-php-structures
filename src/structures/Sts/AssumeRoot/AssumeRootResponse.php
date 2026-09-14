<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Credentials|null $Credentials
 * @property string|null $SourceIdentity
 * @property int<0, max>|null $SessionTokenUtilization
 * @property int<0, max>|null $SessionTokenSize
 */
class AssumeRootResponse extends Response
{
}
