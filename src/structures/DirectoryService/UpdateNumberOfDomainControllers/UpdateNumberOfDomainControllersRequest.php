<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateNumberOfDomainControllers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int<2, max> $DesiredNumber
 */
class UpdateNumberOfDomainControllersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     DesiredNumber: int<2, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
