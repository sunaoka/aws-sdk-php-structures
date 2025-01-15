<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>>|null $additionalInfo
 * @property string $appArn
 */
class UpdateAppVersionRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>|null,
     *     appArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
