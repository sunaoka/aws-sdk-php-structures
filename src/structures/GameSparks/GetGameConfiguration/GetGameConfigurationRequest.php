<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetGameConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property list<string>|null $Sections
 */
class GetGameConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     Sections?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
