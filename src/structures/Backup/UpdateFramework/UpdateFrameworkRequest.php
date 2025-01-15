<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FrameworkName
 * @property string|null $FrameworkDescription
 * @property list<Shapes\FrameworkControl>|null $FrameworkControls
 * @property string|null $IdempotencyToken
 */
class UpdateFrameworkRequest extends Request
{
    /**
     * @param array{
     *     FrameworkName: string,
     *     FrameworkDescription?: string|null,
     *     FrameworkControls?: list<Shapes\FrameworkControl>|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
