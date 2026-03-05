<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $kmsKeyArn
 * @property Shapes\CreateWebAppConfiguration|null $webAppSetupConfiguration
 * @property array<string, string>|null $tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     kmsKeyArn?: string|null,
     *     webAppSetupConfiguration?: Shapes\CreateWebAppConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
