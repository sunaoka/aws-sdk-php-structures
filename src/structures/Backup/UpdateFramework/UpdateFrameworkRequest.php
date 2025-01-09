<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FrameworkName
 * @property string $FrameworkDescription
 * @property list<Shapes\FrameworkControl> $FrameworkControls
 * @property string $IdempotencyToken
 */
class UpdateFrameworkRequest extends Request
{
    /**
     * @param array{
     *     FrameworkName: string,
     *     FrameworkDescription?: string,
     *     FrameworkControls?: list<Shapes\FrameworkControl>,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
