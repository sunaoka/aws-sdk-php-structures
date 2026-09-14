<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateDistributionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Distribution> $distributions
 * @property array<string, string>|null $tags
 * @property string $clientToken
 * @property bool|null $dryRun
 */
class CreateDistributionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     distributions: list<Shapes\Distribution>,
     *     tags?: array<string, string>|null,
     *     clientToken: string,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
