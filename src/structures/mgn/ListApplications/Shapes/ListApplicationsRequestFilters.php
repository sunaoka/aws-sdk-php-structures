<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $applicationIDs
 * @property bool|null $isArchived
 * @property list<string>|null $waveIDs
 */
class ListApplicationsRequestFilters extends Shape
{
    /**
     * @param array{
     *     applicationIDs?: list<string>|null,
     *     isArchived?: bool|null,
     *     waveIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
