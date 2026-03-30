<?php

namespace Sunaoka\Aws\Structures\Omics\CreateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\RunConfigurations $runConfigurations
 * @property array<string, string>|null $tags
 * @property string $requestId
 */
class CreateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     runConfigurations: Shapes\RunConfigurations,
     *     tags?: array<string, string>|null,
     *     requestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
