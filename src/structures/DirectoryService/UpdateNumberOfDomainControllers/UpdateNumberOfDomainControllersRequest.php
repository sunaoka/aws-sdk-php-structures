<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateNumberOfDomainControllers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int $DesiredNumber
 */
class UpdateNumberOfDomainControllersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     DesiredNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
