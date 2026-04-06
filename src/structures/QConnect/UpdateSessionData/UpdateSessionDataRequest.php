<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSessionData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property 'Custom'|null $namespace
 * @property list<Shapes\RuntimeSessionData> $data
 */
class UpdateSessionDataRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     namespace?: 'Custom'|null,
     *     data: list<Shapes\RuntimeSessionData>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
