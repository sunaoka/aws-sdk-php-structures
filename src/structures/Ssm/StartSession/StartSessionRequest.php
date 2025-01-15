<?php

namespace Sunaoka\Aws\Structures\Ssm\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Target
 * @property string|null $DocumentName
 * @property string|null $Reason
 * @property array<string, list<string>>|null $Parameters
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{
     *     Target: string,
     *     DocumentName?: string|null,
     *     Reason?: string|null,
     *     Parameters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
