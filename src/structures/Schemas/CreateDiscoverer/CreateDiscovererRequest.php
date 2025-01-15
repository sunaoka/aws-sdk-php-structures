<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $SourceArn
 * @property bool|null $CrossAccount
 * @property array<string, string>|null $Tags
 */
class CreateDiscovererRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     SourceArn: string,
     *     CrossAccount?: bool|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
