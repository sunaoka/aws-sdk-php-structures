<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateFindingsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ARCHIVE'|'NOOP'|null $action
 * @property string|null $clientToken
 * @property string|null $description
 * @property Shapes\FindingCriteria|null $findingCriteria
 * @property string $id
 * @property string|null $name
 * @property int|null $position
 */
class UpdateFindingsFilterRequest extends Request
{
    /**
     * @param array{
     *     action?: 'ARCHIVE'|'NOOP'|null,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     findingCriteria?: Shapes\FindingCriteria|null,
     *     id: string,
     *     name?: string|null,
     *     position?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
