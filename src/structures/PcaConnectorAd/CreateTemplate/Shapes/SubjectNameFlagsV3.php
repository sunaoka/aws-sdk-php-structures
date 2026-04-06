<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $RequireCommonName
 * @property bool|null $RequireDirectoryPath
 * @property bool|null $RequireDnsAsCn
 * @property bool|null $RequireEmail
 * @property bool|null $SanRequireDirectoryGuid
 * @property bool|null $SanRequireDns
 * @property bool|null $SanRequireDomainDns
 * @property bool|null $SanRequireEmail
 * @property bool|null $SanRequireSpn
 * @property bool|null $SanRequireUpn
 */
class SubjectNameFlagsV3 extends Shape
{
    /**
     * @param array{
     *     RequireCommonName?: bool|null,
     *     RequireDirectoryPath?: bool|null,
     *     RequireDnsAsCn?: bool|null,
     *     RequireEmail?: bool|null,
     *     SanRequireDirectoryGuid?: bool|null,
     *     SanRequireDns?: bool|null,
     *     SanRequireDomainDns?: bool|null,
     *     SanRequireEmail?: bool|null,
     *     SanRequireSpn?: bool|null,
     *     SanRequireUpn?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
