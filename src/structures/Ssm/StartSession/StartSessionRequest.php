<?php

namespace Sunaoka\Aws\Structures\Ssm\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Target
 * @property string $DocumentName
 * @property string $Reason
 * @property array<string, list<string>> $Parameters
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{
     *     Target: string,
     *     DocumentName?: string,
     *     Reason?: string,
     *     Parameters?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
