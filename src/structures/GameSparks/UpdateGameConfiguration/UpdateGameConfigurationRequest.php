<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateGameConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property list<Shapes\SectionModification> $Modifications
 */
class UpdateGameConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     Modifications: list<Shapes\SectionModification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
