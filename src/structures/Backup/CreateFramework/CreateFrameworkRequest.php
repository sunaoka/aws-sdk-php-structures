<?php

namespace Sunaoka\Aws\Structures\Backup\CreateFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FrameworkName
 * @property string $FrameworkDescription
 * @property list<Shapes\FrameworkControl> $FrameworkControls
 * @property string $IdempotencyToken
 * @property array<string, string> $FrameworkTags
 */
class CreateFrameworkRequest extends Request
{
    /**
     * @param array{
     *     FrameworkName: string,
     *     FrameworkDescription?: string,
     *     FrameworkControls: list<Shapes\FrameworkControl>,
     *     IdempotencyToken?: string,
     *     FrameworkTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
