<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateFindingsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ARCHIVE'|'NOOP' $action
 * @property string $clientToken
 * @property string $description
 * @property Shapes\FindingCriteria $findingCriteria
 * @property string $id
 * @property string $name
 * @property int $position
 */
class UpdateFindingsFilterRequest extends Request
{
    /**
     * @param array{
     *     action?: 'ARCHIVE'|'NOOP',
     *     clientToken?: string,
     *     description?: string,
     *     findingCriteria?: Shapes\FindingCriteria,
     *     id: string,
     *     name?: string,
     *     position?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
