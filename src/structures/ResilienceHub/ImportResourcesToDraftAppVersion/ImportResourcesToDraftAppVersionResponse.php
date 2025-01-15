<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ImportResourcesToDraftAppVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property list<Shapes\EksSource>|null $eksSources
 * @property list<string>|null $sourceArns
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 * @property list<Shapes\TerraformSource>|null $terraformSources
 */
class ImportResourcesToDraftAppVersionResponse extends Response
{
}
