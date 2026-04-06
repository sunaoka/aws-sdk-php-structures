<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\AcceptEulas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<string>|null $eulaIds
 * @property string $studioId
 */
class AcceptEulasRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     eulaIds?: list<string>|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
