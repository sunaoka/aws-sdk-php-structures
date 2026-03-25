<?php

namespace Sunaoka\Aws\Structures\Uxc\UpdateAccountCustomizations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'none'|'pink'|'purple'|'darkBlue'|'lightBlue'|'teal'|'green'|'yellow'|'orange'|'red'|null $accountColor
 * @property list<string>|null $visibleServices
 * @property list<string>|null $visibleRegions
 */
class UpdateAccountCustomizationsRequest extends Request
{
    /**
     * @param array{
     *     accountColor?: 'none'|'pink'|'purple'|'darkBlue'|'lightBlue'|'teal'|'green'|'yellow'|'orange'|'red'|null,
     *     visibleServices?: list<string>|null,
     *     visibleRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
