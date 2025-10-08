<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelExportsAsScript;

trait DescribeMetadataModelExportsAsScriptTrait
{
    /**
     * @param DescribeMetadataModelExportsAsScriptRequest $args
     * @return DescribeMetadataModelExportsAsScriptResponse
     */
    public function describeMetadataModelExportsAsScript(DescribeMetadataModelExportsAsScriptRequest $args)
    {
        $result = parent::describeMetadataModelExportsAsScript($args->toArray());
        return new DescribeMetadataModelExportsAsScriptResponse($result->toArray());
    }
}
