<?php

namespace Sunaoka\Aws\Structures\Inspector\AddAttributesToFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingArns
 * @property list<Shapes\Attribute> $attributes
 */
class AddAttributesToFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingArns: list<string>,
     *     attributes: list<Shapes\Attribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
