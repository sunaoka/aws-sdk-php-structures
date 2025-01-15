<?php

namespace Sunaoka\Aws\Structures\Backup\CreateFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FrameworkName
 * @property string|null $FrameworkDescription
 * @property list<Shapes\FrameworkControl> $FrameworkControls
 * @property string|null $IdempotencyToken
 * @property array<string, string>|null $FrameworkTags
 */
class CreateFrameworkRequest extends Request
{
    /**
     * @param array{
     *     FrameworkName: string,
     *     FrameworkDescription?: string|null,
     *     FrameworkControls: list<Shapes\FrameworkControl>,
     *     IdempotencyToken?: string|null,
     *     FrameworkTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
