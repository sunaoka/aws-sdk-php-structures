<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ImportResourcesToDraftAppVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property list<Shapes\EksSource> $eksSources
 * @property list<string> $sourceArns
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 * @property list<Shapes\TerraformSource> $terraformSources
 */
class ImportResourcesToDraftAppVersionResponse extends Response
{
}
