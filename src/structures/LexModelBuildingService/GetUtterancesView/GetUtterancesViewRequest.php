<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetUtterancesView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property list<string> $botVersions
 * @property 'Detected'|'Missed' $statusType
 */
class GetUtterancesViewRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botVersions: list<string>,
     *     statusType: 'Detected'|'Missed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
