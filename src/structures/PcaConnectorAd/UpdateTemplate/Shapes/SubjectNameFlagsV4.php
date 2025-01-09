<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $RequireCommonName
 * @property bool $RequireDirectoryPath
 * @property bool $RequireDnsAsCn
 * @property bool $RequireEmail
 * @property bool $SanRequireDirectoryGuid
 * @property bool $SanRequireDns
 * @property bool $SanRequireDomainDns
 * @property bool $SanRequireEmail
 * @property bool $SanRequireSpn
 * @property bool $SanRequireUpn
 */
class SubjectNameFlagsV4 extends Shape
{
    /**
     * @param array{
     *     RequireCommonName?: bool,
     *     RequireDirectoryPath?: bool,
     *     RequireDnsAsCn?: bool,
     *     RequireEmail?: bool,
     *     SanRequireDirectoryGuid?: bool,
     *     SanRequireDns?: bool,
     *     SanRequireDomainDns?: bool,
     *     SanRequireEmail?: bool,
     *     SanRequireSpn?: bool,
     *     SanRequireUpn?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
