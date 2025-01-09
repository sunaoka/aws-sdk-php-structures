<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateComputer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $ComputerName
 * @property string $Password
 * @property string $OrganizationalUnitDistinguishedName
 * @property list<Shapes\Attribute> $ComputerAttributes
 */
class CreateComputerRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     ComputerName: string,
     *     Password: string,
     *     OrganizationalUnitDistinguishedName?: string,
     *     ComputerAttributes?: list<Shapes\Attribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
