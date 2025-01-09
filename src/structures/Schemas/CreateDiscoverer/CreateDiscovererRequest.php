<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $SourceArn
 * @property bool $CrossAccount
 * @property array<string, string> $Tags
 */
class CreateDiscovererRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     SourceArn: string,
     *     CrossAccount?: bool,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
