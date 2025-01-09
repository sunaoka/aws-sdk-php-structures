<?php

namespace Sunaoka\Aws\Structures\drs\CreateExtendedSourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerArn
 * @property array<string, string> $tags
 */
class CreateExtendedSourceServerRequest extends Request
{
    /**
     * @param array{
     *     sourceServerArn: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
