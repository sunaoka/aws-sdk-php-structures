<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $applicationIDs
 * @property bool $isArchived
 * @property list<string> $waveIDs
 */
class ListApplicationsRequestFilters extends Shape
{
    /**
     * @param array{
     *     applicationIDs?: list<string>,
     *     isArchived?: bool,
     *     waveIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
