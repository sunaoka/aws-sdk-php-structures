<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ImportResourcesToDraftAppVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<Shapes\EksSource>|null $eksSources
 * @property 'AddOnly'|'ReplaceAll'|null $importStrategy
 * @property list<string>|null $sourceArns
 * @property list<Shapes\TerraformSource>|null $terraformSources
 */
class ImportResourcesToDraftAppVersionRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     eksSources?: list<Shapes\EksSource>|null,
     *     importStrategy?: 'AddOnly'|'ReplaceAll'|null,
     *     sourceArns?: list<string>|null,
     *     terraformSources?: list<Shapes\TerraformSource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
