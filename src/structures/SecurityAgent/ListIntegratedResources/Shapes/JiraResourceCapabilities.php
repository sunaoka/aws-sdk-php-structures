<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $createIssue
 * @property bool|null $commentIssue
 */
class JiraResourceCapabilities extends Shape
{
    /**
     * @param array{
     *     createIssue?: bool|null,
     *     commentIssue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
