<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNIX'|'WINDOWS' $Type
 * @property OntapUnixFileSystemUser|null $UnixUser
 * @property OntapWindowsFileSystemUser|null $WindowsUser
 */
class OntapFileSystemIdentity extends Shape
{
    /**
     * @param array{
     *     Type: 'UNIX'|'WINDOWS',
     *     UnixUser?: OntapUnixFileSystemUser|null,
     *     WindowsUser?: OntapWindowsFileSystemUser|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
