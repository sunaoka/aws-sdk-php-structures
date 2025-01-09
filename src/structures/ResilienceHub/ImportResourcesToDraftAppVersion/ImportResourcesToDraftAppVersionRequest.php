<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ImportResourcesToDraftAppVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<Shapes\EksSource> $eksSources
 * @property 'AddOnly'|'ReplaceAll' $importStrategy
 * @property list<string> $sourceArns
 * @property list<Shapes\TerraformSource> $terraformSources
 */
class ImportResourcesToDraftAppVersionRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     eksSources?: list<Shapes\EksSource>,
     *     importStrategy?: 'AddOnly'|'ReplaceAll',
     *     sourceArns?: list<string>,
     *     terraformSources?: list<Shapes\TerraformSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
