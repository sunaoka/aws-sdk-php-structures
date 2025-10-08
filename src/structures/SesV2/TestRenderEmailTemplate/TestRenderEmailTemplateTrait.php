<?php

namespace Sunaoka\Aws\Structures\SesV2\TestRenderEmailTemplate;

trait TestRenderEmailTemplateTrait
{
    /**
     * @param TestRenderEmailTemplateRequest $args
     * @return TestRenderEmailTemplateResponse
     */
    public function testRenderEmailTemplate(TestRenderEmailTemplateRequest $args)
    {
        $result = parent::testRenderEmailTemplate($args->toArray());
        return new TestRenderEmailTemplateResponse($result->toArray());
    }
}
